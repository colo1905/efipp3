<?php

/**
 * Baseefipp3turno
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property datetime $fechahora
 * @property efipp3cliente $efipp3cliente
 * @property efipp3reparacion $efipp3reparacion
 * 
 * @method datetime         getFechahora()        Returns the current record's "fechahora" value
 * @method efipp3cliente    getEfipp3cliente()    Returns the current record's "efipp3cliente" value
 * @method efipp3reparacion getEfipp3reparacion() Returns the current record's "efipp3reparacion" value
 * @method efipp3turno      setFechahora()        Sets the current record's "fechahora" value
 * @method efipp3turno      setEfipp3cliente()    Sets the current record's "efipp3cliente" value
 * @method efipp3turno      setEfipp3reparacion() Sets the current record's "efipp3reparacion" value
 * 
 * @package    efipp3
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseefipp3turno extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('efipp3turno');
        $this->hasColumn('fechahora', 'datetime', null, array(
             'type' => 'datetime',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('efipp3cliente', array(
             'local' => 'cliente_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('efipp3reparacion', array(
             'local' => 'reparacion_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestample0 = new Timestample();
        $this->actAs($timestample0);
    }
}