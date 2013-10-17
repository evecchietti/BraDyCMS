<?php
/**
 * @author			Julian Bogdani <jbogdani@gmail.com>
 * @copyright		BraDypUS 2007-2011
 * @license			All rights reserved
 * @since			Nov 3, 2011
 */

$_lang = array(

	//ADMIN
	//article
	'articles' => 'Articoli',
	'add_new_article' => 'Aggiungi nuovo articolo',
	'show_all_articles' => 'Mostra tutti gli articoli',
	
	//menu
	'menu' => 'Menu',
	'add_new_menu_item' => 'Aggiungi una nuova voce di menu',
	'show_all_menus' => 'Mostra tutti i menu',
	'other' => 'Altro',
	'link2home' => "Link alla home page",
	'link2none' => "Link a niente",
	
	//media
	'media' => 'Media',
	'other' => 'Altro',
	'changelog' => 'Cambiamenti',
	'error_log' => 'Log degli errori',
	'view_site' => 'Visualizza sito',
	'reload' => 'Ricarica',
	'plugins' => 'Plugin',		
	'logout' => 'Esci',
	
	//modules
		//articles
	'delete_article_ok' => 'L\'articolo è stato cancellato',
	'delete_article_error' => 'Errore. L\'articolo id:%s non è stato cancellato.',
	'update_article_ok' => 'L\'articolo è stato aggiornato.',
	'update_article_error' => 'Errore. L\'articolo id:%s non è stato aggiorato.',
	'save_article_ok' => 'L\'articolo è stato salvato.',
	'save_article_error' => 'Errore. L\'articolo non è stato salvato.',
	'manage_articles' => 'Gestione articoli',
	'id' => 'ID',
	'title' => 'Titolo',
	'textid' => 'ID Testuale (url)',
	'status' => 'È pubblicato',
	'sorting' => 'Ordinamento',
	'edit' => 'Modifica',
	'delete' => 'Cancella',
	'pay_attention_please' => 'Attenzione prego',
	'confirm_delete_article' => 'Sei sicuro di volere definitivamente cancellare questo articolo?',
	'close' => 'Chiudi',
	'keywords' => 'Keywords',
	'author' => 'Autore',
	'tags' => 'Tag',
	'creation_date' => 'Data creazione',
	'pubblication_date' => 'Data Pubblicazione',
	'expiration_date' => 'Data scadenza',
	'last_update' => 'Ultimo aggiornamento',
	'summary' => 'Sommario',
	'text' => 'Testo',
	'save' => 'Salva',
	'reset' => 'Annulla',
	'custom_fields' => "Campi personalizzati",
	'duplicate_textid' => "Il valore %s è già stato usato come ID testuale. Si prega di cambiarlo prima di procedere",
	'article_image' => "Immagine dell'articolo",
	'available_dimensions' => "Disponibile nelle seguenti dimensioni (px)",
	'no_art_img_available' => "Questo articolo non dispone di una immagine associata",
	'cfg_art_img_missing' => "Manca la configurazione delle dimensioni dell'immagine di articolo",
	'dir_is_not_writable' => "La cartella %s non è scrivibile",
	'art_images_created' => "Le immagini dell'articolo sono state create",
	'art_img_deleted' => "Le immagini dell'articolo sono state cancellate",
	'art_img_partially_deleted' => "Non è stato possibile cancellare le seguenti immagini dell'articolo: %s",
	'art_img_not_deleted' => "Non è stato possibile cancellare nessuna delle immagini dell'articolo",
	'delete_art_img' => "Cancella l'immagine dell'articolo",
	'confirm_delete_tag_not_used' => "Il tag `%s` non è collegato a nessun articolo. Cancellare?",
	'error_delete_tag' => "Errore nel cancellare il tag. Per maggiori informazioni si prega di consultare il log degli errori.",
	'delete_unused_tags' => "Cancellare tutti i tag non utilizzati?",
	'preview_draft' => "Visualizza anteprima",
			//menus
	'manage_menus' => 'Gestione menu',
	'item' => 'Testo',
	'link' => 'Link',
	'target' => 'Target',
	'menu' => 'Menu',
	'sub_of' => 'Sotto menu di',
	'confirm_delete_menu_item' => 'Sei sicuro di vole cancellare questa voce di menu?',
	'delete_menu_ok' => 'Voce di men cancellata',
	'delete_menu_error' => 'Errore. La voce di menu id:%s non è stata cancellata.',
	'update_menu_error' => 'Errore. La voce di menu id:%s non è stata aggiornata.',
	'save_menu_ok' => 'La voce di menu è stata aggiornata.',
	'save_menu_error' => 'Errore. La voce di menu non è stata salvata.',
	'select_menu' => 'Seleziona il menu',
	'error_update_sort' => "Errore nell'aggiornamento dell'ordine degli elementi menu",
			//media
	'create_dir_error' => 'Errore. Non è possibile creare la cartella <code>%s</code>',
	'delete_dir_error' => 'Errore. La cartella non è stata cancellata! Probabilmente la cartella non è vuota!',
	'delete_file_error' => 'Errore. Il file non è stato cancellato!',
	'deletion_ok' => 'Cancellazione completata!',
	'new_dir_name' => 'Nome della nuova cartella',
	'create_go' => 'Crea & Vai!',
	'delete_directory' => 'Cancella cartella',
	'confirm_delete_file' => 'Sei sicuro di vole cancellare questo file?',
	'missing_directory_name' => 'Il nome della cartella non può essere vuoto!',
	'open_download' => 'Apri / Scarica',
	'rename' => 'Rinomina',
	'file_exists' => 'Errore. il file %s esiste già! Non è permesso sovrascrivere',
	'original_file_not_found' => 'Errore. Il file originale %s non è stato trovato!',
	'moving_file_error' => 'Errore. Non è stato possibile rinominare il file in %s',
	'moving_file_ok' => 'Il file è stato rinominato',
	'copy' => 'Copia',
	'copying_file_error' => "Impossibile copiare il file in %s",
	'copying_file_ok' => "Il file è stato copiato",
	'invalid_name' => 'Errore. Nome file non valido',
	'no_change_to_save' => 'Nessun cambiamento da salvare',
	'convert' => 'Conversione tipo file',
	'error_converting_file' => "Errore. Non è stato possibile convertire il file",
	'ok_converting_file' => "Il file è stato convertito",
  'error_copying_file' => "Errore. Non è stato possibile spostare il file",
	'ok_copying_file' => "Il file è stato spostato",
	'crop' => "Ritaglia",
	'offset_x' => "Offset x",
	'offset_y' => "Offset y",
	'error_cropping_file' => "Errore. Il file non è stato ritagliato",
	'ok_cropping_file' => "Il file è stato ritagliato",
	'resize' => "Ridimensiona",
	'error_reisizing_file' => "Errore. Il file non è stato ridimensionato",
	'ok_resizing_file' => "Il file è stato ridimensionato",
	
	// galleries
	'galleries' => 'Gallerie',
	'new_gallery' => 'Nuova galleria',
	'edit_gallery' => 'Modifica galleria',
	'image' => 'Immagine',
	'description' => 'Descrizione',
	'thumbnail' => 'Anteprima',
	're_create_thumb' => '(Ri) crea anteprima',
	'img_dimensions' => 'Dimensioni immagine',
	'gallery_name' => 'Nome della galleria',
	'gallery_name_cannot_be_empty' => 'Il nome della galleria non può essere vuoto',
	'gallery_exists' => 'Esiste già una galleria con questo nome. Non è possibile sovrascrivere',
	'gallery_created' => 'La galleria è stata creata',
	'gallery_not_created' => 'Errore. La galleria non è stata creata',
	'gallery_partially_created' => 'Attenzione. La cartella della galleria è stata creata, ma non è stato possibile creare la cartelle delle anteprime',
	'delete_gal' => 'Cancella galleria',
	'gallery_deleted' => 'La galleria è stata cancellata',
	'gallery_not_deleted' => 'Errore. La gallerina non è stata cancellata. Maggiori informazioni nel log degli errori',
	'gal_name_formatting' => 'Attenzione. Il nome della galleria non deve contenere spazi o caratteri speciali e deve essere tutto in caratteri minuscoli. I seguenti carateri: <code> ,\'"</code> verranno sostituiti con _ e le maiuscole verrano convertite in minuscole',
	'thumbnail_created' => "L'anteprima è stata creata",
	'thumbnail_not_created' => "Errore. L'anteprima non è stata creata",
	'gallery_does_not_exist' => "Errore. La galleria %s non esiste",
	'gallery_not_well_formatted' => "Errore. La galleria %s non è formattata bene",
	'gallery_updated' => "La galleria è stata aggiornata",
	'gallery_not_updated' => "Errore. La galleria non è stata aggiornata",
	'img_not_deleted'	=> "Errore. Non è stato possibile cancellare l'immagine",
	'img_deleted_thumb_not_deleted' => "Attenzione. L'immagine è stata cancellata, ma non è stato possibile cancellare l'anteprima",
	'img_deleted_json_not_deleted' => "Attenzione. L'immagine è stata cancellata, ma non è stato possibile cancellare i dati",
	'img_deleted_thumb_json_not_deleted' => "Attenzione. L'immagine è stata cancellata, ma non è stato possibile cancellare l'anteprima e i dati",
	'img_thumb_data_deleted' => "L'immagine, l'anteprima e i dati sono stati cancellati",
	'translation_in_lang' => "Traduci in %s",
	
	'error_check_log' => 'Errore. Qualcosa è andato storto! Consultare il log degli errori per maggiori dettagli.',
	
	'please_sign_in' => 'Si prega di autenticarsi',
	'email_address' => 'Indirizzo email',
	'password' => 'Password',
	'sign_in' => 'Autenticazione',
	'access_denied' => 'Accesso negato. Username o password sbagliate',
	'logged_out' => 'Sessione chusa',
	'language' => 'Lingua',
	
		// translate
	'translations' => 'Traduzioni',
	'transl_article' => "Traduci articolo",
	'translated' => "Tradotto",
	'not_translated' => "Non tradotto",
	'translate_article_in' => "Traduci articolo in %s",
	'translate_menu_item_in' => "Traduci voce del menu in %s",
	'ok_translation_saved' => "La traduzione è stata salvata",
	'error_translation_not_saved' => "Errore. Non è stato possibile salavare la traduzione",
	 
	 
	 // DOCS
	 'docs' => "Documentazione",
	
		//template manager
	'template_mng' => "Gestore template",
	'edit_html' => "Modifica HTML/TWIG",
	'edit_css' => "Modifica CSS",
	'ok_compiling_less' => "Il file styles.less è stato compilato nel file styles.css",
	'error_compiling_less' => "Errore. Non è stato possibile compilare il file styles.less in styles.css",
	'compile_less' => "Compila styles.less",
	'what_is_less' => "Cos'è LESS?",
	'what_is_twig' => "Cos'è TWIG?",
	'empty_cache_to_use_twig' => "Per rendere effettivi i cambiamenti eseguiti nei file TWIG è necessario svuotare la cache",
	'compile_less_to_apply_changes' => "Per rendere effettivi i cambiamenti eseguiti nei file LESS è necessario compilare il file styles.less",
	
	
	// GUI
	'read_more' => 'leggi tutto....',
	'from_same_section' => 'Dalla stessa sezione',
	'no_articles_in_section' => 'Nessun articolo per questa sezione',
	'article_does_not_exist' => 'L\'articolo richiesto non esite',
	'search_site' => 'cerca nel sito...',
	'no_result_for_query' => 'Spiacenti, la ricerca di `<mark>%s</mark>` non ha prodotto alcun risultato!',
	'x_results_for_query' => 'La parola `<mark>%s</mark>` è stata trovata nei seguenti %s articoli:',
	'search' => 'cerca',
	'clear' => 'pulisci',
	'client_error' => 'Qualcosa è andato storto. Contattare l\'amministrattore per maggiori informazioni',
	'menu_error' => 'Errore nel visualizzare il menu <strong>%s</strong>',
	'sub_menu_error' => 'Errore nel visualizzare il sottomenu di <strong>%s</strong>',
	'section_list_error' => 'Errore nel visualizzare gli articoli della sezione <strong>%s</strong>',
	'article_error' => 'Errore nel visualizzare l\'articolo richesto',
	'siblings_error' => 'Errore nel visualizzare la lista degli articolo correlati',
	'search_error' => 'Errore nel visualizzare i risultati della ricerca',
	'back' => 'Indietro',
	'main_menu' => 'Menu principale',
	
	'cfg_editor' => 'Configurazione del sito',
	'cfg-name' => 'Nome del sito',
	'cfg-mission' => 'Mission del sito',
	'cfg-title' => 'Titolo di default delle pagine del sito',
	'cfg-description' => 'Descrizione del sito',
	'cfg-keywords' => 'Parole chiavi',
	'cfg-sys_lang' => 'ID della lingua del sistema',
	'cfg-sys_lang_string' => 'Nome dell lingua del sistema',
	'cfg-db_connection' => 'Stringa di connessione al database',
  'cfg-db_user' => 'Utente database',
  'cfg-db_pass' => 'Password database',
	'cfg-prefix' => 'Prefisso del database',
	'cfg-timezone' => 'Fuso orario del sito',
	'cfg-languages' => 'Lingue del sistema',
	'cfg-lang_id' => 'Identificativo lingua',
	'cfg-lang_name' => 'Nome lingua',
	'cfg-lang_published' => 'È pubblicata?',
	'cfg-ga' => 'Google Analytics',
	'cfg-ga_id' => 'Google analytics ID',
	'cfg-ga_domain' => 'Limita Google Analytics al dominio',
	'cfg-paths' => 'Percorsi del sistema',
	'cfg-users' => 'Utenti',
	'cfg-debug' => 'Modalità debug',
	'cfg-thumbs_dimensions' => "Dimensioni anteprime",
	'cfg-art_img_dimensions' => "Dimensioni delle immagini degli articoli",
	'cfg-fld_name' => "Nome del campo",
	'cfg-type' => "Tipo del campo",
	'cfg-label' => "Etichetta del campo",
	'cfg-values' => "Valori predefiniti del campo",
	'encrypted_passw' => 'Password criptata',
	'one_way_encrypt_passw' => 'Cripta la password',
	'on' => 'attivata',
	'off' => 'disattivata',
	'empty_cache' => 'Svuota cache',
	'cache_help_text' => "La cache rende più veloce il caricamento delle pagine, ma se vengono effettuati cambaimenti nel layout del sito la cache deve essere svuotata per rendere effettive le modifiche. La cache verrà creata automaticamente alla prima visita della pagina.",
	'cache_emptied' => "La cache è stata svuotata",
	'cache_not_emptied' => "Errore. La cache non è stata svuotata",
	'ok_cfg_update' => "La configurazione del sito è stata aggiornata",
	'error_cfg_update' => "Errore. Non è stato possibile aggiornare la configurazione del sito",
	
	'sys_translate' => 'Traduzione sistema',
	'select_lang_to_edit' => 'Seleziona lingue da modificare',
	'show_incomplete_translations' => 'Mostra traduzioni incomplete',
	'show_all_translations' => 'Mostra tutte le traduzioni',
	'ok_language_update' => 'Il file di traduzione è stato aggiornato',
	'error_language_update' => 'Errore. Non è stato possibile aggiornare il file di traduzione',
	'ok_lang_create' => 'Il nuovo file di traduzione è stato creato',
	'error_lang_create' => 'Errore. Non è stato possibile creare il nuovo file di traduzione',
	'add_locale' => 'Aggiungi una nuova lingua',
	'enter_locale' => 'Inserisci (due lettere) l\'identificativo della nuova lingua',
	'new_locale_cant_be_empty' => "La sigla della nuova lingua non può essere vuota",
			
	// OAI
	'no_oai_config_for_site' => "L'interfaccia OAI non è configurato per questo sito",
	
	// USER Forms
	'user_forms' => "Moduli utente",
	'no_user_form_available' => "Nessun modulo utente salvato",
	'add_new_form' => "Aggiungi un nuovo modulo",
	'available_forms' => "Moduli disponibili",
	'add_form_name' => "Inserisci il nome del nuovo modulo",
	'no_special_chars' => "Non sono permessi spazi, linee medie e basse o altri caratteri speciali!",
	'ok_form_config_saved' => "La configurazione del modulo è stato salvata",
	'error_form_config_not_saved' => "Errore. La configurazione del modulo non è stato salvata",
	'confirm_delete_form' => "Sei sicuro di voler cancellare questo modulo? Questa azione non può essere annullata",
	'ok_form_deleted' => "Il modulo è stato cancellato",
	'error_form_not_deleted' => "Errore. Il modulo non è stato cancellato",
  
  //UPDATE
  'auto_updates' => "Aggiornamenti automatici",
  'update_sys' => "Sistema di aggiornamenti",
  'check_for_updates' => "Controlla aggiornamenti disponibili",
  'you_are_running_v' => "Attualmente è installata la versione %s",
  'already_updated' => "Il vostro sistema è già aggiornato all'ultima versione disponibile",
  'not_updateable' => "Attenzione. Non è possibile aggiornare automaticamente il vostro sistema, perché la major release della versione più recente (%s) non coincide con quella installata(%s). È possibile fare aggiornamenti automatici solo per major releases uguali.",
  'local_dev' => "Sembra che sia installata una versione di sviluppo (%s) più avanzata di quella disponibile (%s)",
  'new_version_available' => "Una nuova versione è disponibile (%s) e il vostro sistema è compatibile con questo aggiornamento",
  'download_install' => "Scarica e installa",
  'updateable_warning' => "Attenzione, è possibile eseguire l'aggioramento, ma si consiglia comunque di leggere le note di versione per l'elenco delle nuove funzioni",
  'error_version_check' => "Qualcosa è andato storto nel controllo degli aggiornamenti. per maggiori dettagli si prega di consultare il log degli errori",
  'error_install' => "Qualcosa è andato storto nel controllo durante l'installazione. Per maggiori dettagli si prega di consultare il log degli errori",
  'update_downloaded' => "L'aggiornamento è stato scaricato senza problemi",
  'update_unpacked' => "L'aggiornamento è stato scompattato senza problemi",
  'update_installed' => "L'aggiornamento è stato installato senza problemi"

);