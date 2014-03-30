<?php
/**
 * @author			Julian Bogdani <jbogdani@gmail.com>
 * @copyright		BraDyUS. Communicating Cultural Heritage, http://bradypus.net 2007-2013
 * @license			MIT, See LICENSE file
 * @since			Dec 9, 2012
 */
 
class media_ctrl extends Controller
{
	public function all()
	{
		$rel_path = implode('/', $this->get['param']);
		$path = IMG_DIR . $rel_path;
		
		if (!is_dir($path))
		{
			if ( !mkdir($path, 0777, 1) )
			{
				$error_create = tr::sget('create_dir_error', $path);
				$path = IMG_DIR;
			}
		}
		
		
		$files = utils::dirContent($path);
		
		
		if (is_array($files))
		{
			sort($files);
				
			$file_obj = array();
				
			foreach ($files as $file)
			{
				$file_obj[$file]['href'] = ($rel_path ? $rel_path . '/' : '') . $file;
				$file_obj[$file]['name'] = $file;
			
				if ( is_file($path . '/'. $file ) )
				{
					$file_obj[$file]['type'] = 'file';
			
					$ftype = utils::checkMimeExt($path . '' . $file);
						
					if ($ftype[0] == 'image')
					{
						$file_obj[$file]['src'] = $path . '/' . $file;
						$file_obj[$file]['image'] = true;
					}
					else
					{
						$file_obj[$file]['src'] = './img/ftype_icons/' . $ftype[1];
					}
				}
				else
				{
					$file_obj[$file]['type'] = 'folder';
						
					//$file_obj[$file]['src'] = './img/folder.png';
				}
			}
		}
		
		if(!empty($this->request['param'][0]))
		{
			$path_arr = $this->request['param'];
			array_unshift($path_arr, '.');
		}
		else
		{
			$path_arr = array('.');
		}
		
		$this->render('media', 'list', array(
				'error_create' => $error_create,
				'path_arr'=> $path_arr,
				'path' => $path,
				'rel_path' => $rel_path,
				'files' => $file_obj,
				'tr' => new tr()
		));
	}
	
	public function edit()
	{
		$file = IMG_DIR . implode('/', $this->get['param']);
		
		$this->render('media', 'edit_form', array(
				'file' => $file,
				'uid' => uniqid(),
				'finfo' => getimagesize($file),
				'pathinfo' =>pathinfo($file),
				'tr' => new tr()
		));
	}
	
	public function copy()
	{
		$this->request['param'][3] = true;
		self::rename();
		
	}
	
	public function rename()
	{
		$dir = $this->request['param'][0];
		$ofile = $this->request['param'][1];
		$nfile = $this->request['param'][2];
		$copy = $this->request['param'][3];
		
		$dir .= '/';
		
		try
		{
			if (!file_exists($dir . $ofile))
			{
				throw new Exception(tr::sget('original_file_not_found', $dir . $ofile));
			}
			
			if (file_exists($dir . $nfile))
			{
				throw new Exception(tr::sget('file_exists', $dir . $nfile));
			}
			
			$copy ? @copy($dir . $ofile, $dir . $nfile) : @rename($dir . $ofile, $dir . $nfile);
			
			if (!file_exists($dir . $nfile))
			{
				throw new Exception(tr::sget($copy ? 'copying_file_error' : 'moving_file_error', $dir . $nfile));
			}
			
			$out['status'] = 'success';
			$out['text'] = tr::get($copy ? 'copying_file_ok' : 'moving_file_ok');
		}
		catch (Exception $e)
		{
			$out['status'] = 'error';
			$out['text'] = $e->getMessage();
		}
		
		echo json_encode($out);
	}
	
	public function delete()
	{
		$ofile = IMG_DIR . $this->request['param'][0];
		
		if(preg_match('/\//', $this->request['param'][0]))
		{
			$path_arr = explode('/', $this->request['param'][0]);
		
			array_pop($path_arr);
					
			$out['new_path'] = implode('/', $path_arr);
		}
		
		if (!$out['new_path'])
		{
			$out['new_path'] = '';
		}
		
		try
		{
			if ( is_dir ( $ofile ) )
			{
				@unlink($ofile . '/.DS_Store');
				@unlink($ofile . '/.Thumb.db');
				if ( !@rmdir($ofile) )
				{
					throw new Exception(tr::get('delete_dir_error'));
				}
			}
			else if ( is_file ( $ofile ) )
			{
				if ( !@unlink($ofile) )
				{
					throw new Exception(tr::get('delete_file_error'));
				}
			}
			
			$out['status'] = 'success';
			$out['text'] = tr::get('deletion_ok');
			
			$out['file'] = $ofile;
				
		}
		catch(Exception $e)
		{
			$out['status'] = 'error';
			$out['text'] = $e->getMessage();
		}
		echo json_encode($out);
	}
	
	public function crop()
	{
		$ofile = $this->request['param'][0];
		$crop = $this->request['param'][1];
		
		$this->process_convert($ofile, false, 'crop', $crop);
	}
	
	
	public function resize()
	{
		$ofile = $this->request['param'][0];
		$size = $this->request['param'][1];
		
		$this->process_convert($ofile, false, 'resize', $size);
	}
	
	
	public function convert()
	{
		$ofile = $this->request['param'][0];
		$nfile = $this->request['param'][1];
		
		$this->process_convert($ofile, $nfile);
	}
	
	private function process_convert($ofile, $nfile, $type = false, $details = false)
	{
		try
		{
			$ok = imgMng::process_convert($ofile, $nfile, $type, $details);
		
			$out['status'] = 'success';
			$out['text'] = tr::get($ok);
		}
		catch (Exception $e)
		{
			$out['status'] = 'error';
			$out['text'] = tr::get($e->getMessage());
		}
		
		echo json_encode($out);
	}
  
  public function makeThumbs($dir = false, $max = false, $fixed = false, $overwrite = false, $recursive = false)
  {
    set_time_limit(0);
    !$dir ? $dir = $this->request['dir'] : '';
    !$max ? $max = $this->request['max'] : '';
    !$fixed ? $fixed = $this->request['fixed'] : '';
    !$overwrite ? $overwrite = $this->request['overwrite'] : '';
    !$recursive ? $recursive = $this->request['recursive'] : '';
    
    if (!$fixed && !$max)
    {
      echo tr::get('max_or_fixed_dim_required');
      return;
    }
    
    if ($fixed)
    {
      $details = $fixed;
    }
    
    $validExts = array('bmp', 'gif', 'jpg', 'png', 'tif');
    
    $files = utils::dirContent($dir);
    
    if (!is_array($files))
    {
      return;
    }
    
    foreach ($files as $file)
    {
      if (
        is_dir($dir . '/' . $file)
        &&
        $file !== 'thumbs'
        &&
        $file !== 'downloads'
        &&
        $recursive
        )
      {
        $this->makeThumbs($dir . '/' . $file, $max, $fixed, $overwrite, $recursive);
      }
      else if (is_file($dir . '/' . $file))
      {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        
        $nfile = $dir . '/thumbs/' . str_replace($ext, 'jpg', $file);
        
        if (file_exists($nfile) && !$overwrite)
        {
          continue;
        }
        
        if (!$details)
        {
          $dim = getimagesize($dir . '/' . $file);
          $w = $dim[0];
          $h = $dim[1];

          if ($w > $h)
          {
            $details = $max. 'x' . ( $h / ( $w/$max ) );
          }
          else
          {
            $details = ( $w / ( $h/$max ) ) . 'x' . $max;
          }
        }
      
        if (!in_array($ext, $validExts))
        {
          continue;
        }
        
        if (!is_dir($dir . '/thumbs'))
        {
          @mkdir($dir . '/thumbs', 0777, true);
        }
        
        imgMng::thumb(
          $dir . '/' . $file,
          $nfile,
          $details);
        
        if (!file_exists($nfile))
        {
          error_log('Error can not create thumbnail: ' . $nfile);
          $error[] = $nfile;
        }
      }
    }
    
    if ($error)
    {
      echo 'error_in_creating_some_thumbails';
    }
  }
	
}