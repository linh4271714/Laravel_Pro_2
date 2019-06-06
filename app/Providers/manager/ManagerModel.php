<?php 
/**
 * 
 */
class ManagerModel
{
	private $table = 'manager';
	public function view_all()
	{
		$array_manager = DB::select("select * from $this->table");
		dd($array_manager);
		return $array_manager;
	}
}