<?php

class CalculationsAll
{

	public $name = 'Calculations all';
	public $sequence = 0;
	public $reference = 'SCalculations';

	/**
	 * Process function
	 * @param Vtiger_Record_Model $instance
	 * @return int
	 */
	public function process(Vtiger_Record_Model $instance)
	{
		$count = (new \App\Db\Query())->from('u_#__scalculations')
				->innerJoin('vtiger_crmentity', 'u_#__scalculations.scalculationsid = vtiger_crmentity.crmid')
				->where(['deleted' => 0, 'u_#__scalculations.accountid' => $instance->getId()])->count(1);
		return (int) $count;
	}
}
