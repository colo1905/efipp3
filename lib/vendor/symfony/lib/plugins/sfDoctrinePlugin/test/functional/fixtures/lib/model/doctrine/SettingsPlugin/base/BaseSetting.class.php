<?php

/**
 * BaseSetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $value
 * @property float $weight
 * 
 * @method string  getName()   Returns the current record's "name" value
 * @method string  getValue()  Returns the current record's "value" value
 * @method float   getWeight() Returns the current record's "weight" value
 * @method Setting setName()   Sets the current record's "name" value
 * @method Setting setValue()  Sets the current record's "value" value
 * @method Setting setWeight() Sets the current record's "weight" value
 * 
 * @package    symfony12
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSetting extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('setting');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'notnull' => true,
             ));
        $this->hasColumn('value', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('weight', 'float', 4, array(
             'type' => 'float',
             'length' => 4,
             'scale' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'updated' => 
             array(
              'disabled' => true,
             ),
             ));
        $this->actAs($timestampable0);
    }
}