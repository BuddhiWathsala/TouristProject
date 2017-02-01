<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Common_Functions extends CI_Model
{
    public function cryptPassword($input,$rounds=9)
    {
        $salt = "";
        $saltChars = array_merge(range('A','Z'),range('a','z'),range(0,9));
        for($i=0; $i<22;$i++)
        {
            $salt .= $saltChars[array_rand($saltChars)];
        }



        return crypt($input, sprintf('$2y$%02d$',$rounds).$salt);
    }



}
