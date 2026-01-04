<?php
// menuItem class
include_once(getabspath("include/menuitem.php"));
include(getabspath("include/testing.php"));
include_once(getabspath("classes/xtempl_base.php"));

/**
  * Xlinesoft Template Engine
  */
class XTempl extends XTempl_Base
{
	
	function report_error($message)
	{
		echo $message;
		exit();
	}
	

	function call_func($var)
	{
		if(!strlen(@$var["func"]))
			return "";
		ob_start();	
		$params=$var["params"];
		$func=$var["func"];
		xtempl_call_func($func,$params);
		$out=ob_get_contents();
		ob_end_clean();
		return $out;
	}


	function processVar(&$var, &$varparams)
	{
		if(!is_array($var))
		{
		//	just display a value
			echo $var;
		}
		elseif(isset($var["func"]))
		{
		//	call a function
			$params = array();
			if(isset($var["params"]))
				$params = $var["params"];
			$this->transformFuncParams( $varparams, $params );
			$func = $var["func"];
			xtempl_call_func($func,$params);
		}
		elseif(isset($var["method"]))
		{
			$params = array();
			if(isset($var["params"]))
				$params = $var["params"];
			$this->transformFuncParams( $varparams, $params );
			$method = $var["method"];
//			if(method_exists($var["object"],$method))
				$var["object"]->$method($params);
		}
		else
		{
			$this->report_error("Incorrect variable value");
			return;
		}
	}
	
	
	function display($template)
	{
		$this->load_template($template);
		$this->process_template( $this->template );
	}
}

?>