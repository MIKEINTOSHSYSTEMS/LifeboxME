<?php

require_once( getabspath( "classes/ciphereres.php" ) );

class RunnerCiphererAES extends RunnerCiphererES
{
	protected $forceMCrypt = false;
	function __construct($key, $alg )
	{
		$this->INITIALISATION_VECTOR = 'A7EC0E8D9D35BFDA';
		$this->SSLMethod = 'AES-256-CBC';
		
		//	legacy - AES-128 was used with mcrypt library. 
		if( $alg === ENCRYPTION_ALG_AES ) {
			$this->forceMCrypt = true; 
			$this->mcript_algorithm = MCRYPT_RIJNDAEL_128;
		}
		$this->max_key_size = 32;
		parent::__construct($key);

		if( $this->forceMCrypt && !$this->mcrypt_exist() ) {
			throw new Exception("Selected encryption method requires 'mcrypt' PHP extension. Either install mcrypt or switch to AES-256 encryption");
		}
		if( !$this->forceMCrypt && !$this->openSSL_exist() ) {
			throw new Exception("Install 'openssl' PHP extension");
		}

	}

	function useOpenSSL() {
		return !$this->forceMCrypt;
	}


}

?>