<?php
//test
class User
{
	public function validate()
	{
		if (empty($this->data)) {
			return false;
		} else {
			return true;
		}
	}

	public function save()
	{
		return $this->validate();
	}

    /*public static function findById($id)
    {
    	return [];
    }

    public static function findAll($conditions)
    {
    	return [];
    }*/
}