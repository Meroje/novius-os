<?php
/**
 * NOVIUS OS - Web OS for digital communication
 * 
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Cms\Media;

use Fuel\Core\Arr;
use Fuel\Core\Config;

class Controller_Admin_Inspector_Extension extends \Cms\Controller_Inspector_Data {

	public function before() {
		Config::load('cms_media::admin/extension', true);
		$this->config = Arr::merge($this->config, Config::get('cms_media::admin/extension'));

		parent::before();
	}
}