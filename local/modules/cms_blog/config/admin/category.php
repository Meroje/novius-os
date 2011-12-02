<?php
/**
 * NOVIUS OS - Web OS for digital communication
 * 
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
	'query' => array(
		'model' => 'Cms\Blog\Model_Category',
	),
	'columns' => array(
		array(
			'headerText' => 'Category',
			'dataKey' => 'title',
		),
		array(
			'headerText' => 'Up.',
			'cellFormatter' => 'function(args) {
				if ($.isPlainObject(args.row.data)) {
					args.$container.css("text-align", "center");

					$("<a href=\"admin/cms_blog/form?id=" + args.row.data.id + "\"></a>")
						.addClass("ui-state-default")
						.append("<span class=\"ui-icon ui-icon-pencil\"></span>")
						.appendTo(args.$container);

					return true;
				}
			}',
			'allowSizing' => false,
			'width' => 1,
			'showFilter' => false,
		),
		array(
			'headerText' => 'Del.',
			'cellFormatter' => 'function(args) {
				if ($.isPlainObject(args.row.data)) {
					args.$container.css("text-align", "center");

					$("<a href=\"admin/cms_blog/form?id=" + args.row.data.id + "\"></a>")
						.addClass("ui-state-default")
						.append("<span class=\"ui-icon ui-icon-close\"></span>")
						.appendTo(args.$container);

					return true;
				}
			}',
			'allowSizing' => false,
			'width' => 1,
			'showFilter' => false,
		),
	),
	'dataset' => array(
		'id'    => 'blgc_id',
		'title' => 'blgc_titre',
	),
	'urljson' => 'admin/cms_blog/inspector/category/json',
	'input_name'   => 'blgc_id[]',
	'widget_id' => 'inspector-category',
);