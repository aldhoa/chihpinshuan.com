<?php 
	namespace App\Auth;

	use Cake\Auth\AbstractPasswordHasher;

	class LegacyPasswordHasher extends AbstractPasswordHasher
	{
		/**
     * Setting admin model
     * @author TuanPV
     * @since 2017/05/09
     * @param $password
     * @return
     *
     */    
	    public function hash($password)
	    {
	        return md5($password);
	    }
	    /**
	     * Setting admin model
	     * @author TuanPV
	     * @since 2017/05/09
	     * @param $password,$hashedPassword
	     * @return
	     *
	     */    
	    public function check($password, $hashedPassword)
	    {
	        return md5($password) === $hashedPassword;
	    }
	}
?>