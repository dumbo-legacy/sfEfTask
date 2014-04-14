<?php
/**
 * sfEfTask.
 *
 * Class to run a symfony task.
 *
 * @package    sfEfTask
 * @subpackage 
 * @author     Yaismel Miranda Pons <yaismelmp@googlemail.com>
 * @version    1.0
 */
class sfEfTask
{
  public static function execute($class_name, $arguments = array(), $options = array())
  {
    $task = new $class_name(sfContext::getInstance()->getEventDispatcher(), new sfFormatter());
    chdir(sfConfig::get('sf_root_dir'));
    $task->run($arguments, $options);
  }
  
  /* Task List */
  public static function clearCache($arguments = array(), $options = array())
  {
    self::execute('sfCacheClearTask', $arguments, $options);
  }
}
