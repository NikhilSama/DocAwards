<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
        public $components = array('Session', 'RequestHandler', 
			           'Auth' => array(
			            	'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
     	       			   	'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')));
		
		public function autocomplete () {
			$term = isset($this->request->query['term']) ? $this->request->query['term'] : null;
			$head_only_match = isset($this->request->query['head_only_match']) ? 1 : 0;
			$result['code'] = '200';

			$conditions = array($this->{$this->modelClass}->displayField.' LIKE' => ($head_only_match ? '' : '%').$term.'%');
			$this->{$this->modelClass}->recursive = -1;

			$result['data'] = $this->{$this->modelClass}->find('list', array('conditions' => $conditions, 'limit' => 100));
			$this->set('result', $result);
			if (isset($this->request->query['jsonp_callback'])) {
				$this->autoLayout = $this->autoRender = false;
				$this->set('callback', $this->request->query['jsonp_callback']);
				$this->render('/Layouts/jsonp');
			} else {
				$this->set('_serialize', 'result');
			}		
		}
}
