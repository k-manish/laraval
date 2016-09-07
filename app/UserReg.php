<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use FileMaker;
class UserReg extends FileMaker
{
    protected $fmcon;
    public function __construct()
    {
        $this->fmcon = new FileMaker('demodb', '172.16.8.1', 'admin', 'mindfire');
    }
    public function addUser($name,$mail,$contact,$pswd)
    {
        $cmd = $this->fmcon->createRecord('USER');
        $cmd->setField('name',$name);
        $cmd->setField('mail_id',$mail);
        $cmd->setField('mobile',$contact);
        $cmd->setField('password',$pswd);
            
        $result = $cmd->commit();
        if(FileMaker::isError($result)){ 
             echo 'registration failed';
        }
        else
            echo 'registration done';
    }
    public function find()
    {
        $request = $this->fmcon->newFindCommand('user_add_self');
        $request->addFindCriterion('name', 'manish...');
        $result = $request->execute();
        $records = $result->getRecords();
        
        foreach($records as $record)
        {
            echo $record->getField("name")."  ". $record->getField("mobile"). " ".$record->getField("mail_id");
            echo "<br>";
        }
    }
}
