<?php
/**
 * Model template file.
 *
 * Used by bake to create new Model files.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 1.3
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

echo "<?php\n";
?>
namespace <?= $appNamespace ?>\Model\Table;

use Cake\ORM\Table;
<?php if (!empty($validation)): ?>
use Cake\Validation\Validator;
<?php endif ?>

/**
 * <?= $name ?> Model
 */
class <?= $name ?>Table extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
	}

<?php if (!empty($validation)): ?>
/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
	<?php foreach ($validation as $field => $rule): ?>
		->add('<?= $field ?>', 'valid', ['rule' => '<?= $rule['rule'] ?>'])
		<?php if ($rule['allowEmpty']): ?>
		->allowEmpty('<?= $field ?>')
		<?php endif ?>
	<?php endforeach ?>;
	}
<?php endif ?>

}