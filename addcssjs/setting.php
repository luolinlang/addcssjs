<?php
/**
 * 自定义样式<插件配置>
 * @package phpok\plugins
 * @作者 phpok.com
 * @版本 5.2.031
 * @授权 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @时间 2019年04月01日 23时33分
**/
class setting_addcssjs extends phpok_plugin
{
	public $me;
	public function __construct()
	{
		parent::plugin();
		$this->me = $this->_info();
	}
	
	/**
	 * 插件配置参数时，增加的扩展表单输出项，如果不使用，请删除这个方法
	**/
	public function index()
	{
		//return $this->_tpl('setting.html');
	}
	
	/**
	 * 插件配置参数时，保存扩展参数，如果不使用，请删除这个方法
	**/
	public function save()
	{
		//$id = $this->_id();
		//$ext = array();
		//$ext['扩展参数字段名'] = $this->get('表单字段名');
		//$this->_save($ext,$id);
	}
	
	/**
	 * 插件执行审核动作时，执行的操作，如果不使用，请删除这个方法
	**/
	public function status()
	{
		//执行一些自定义的动作
	}
	
	
}