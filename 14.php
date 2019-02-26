<?php
/**Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd)
 * и возвращает получившуюся строку.
 *
 * Параметры функции:
 *
 * Список определений следующего формата:
 *
 * <?php
 *
 * $definitions = [
 * ['definition1', 'description1'],
 * ['definition2', 'description2']
 * ];
 *
 * То есть каждый элемент входного списка сам является массивом, содержащим два элемента: термин и его определение.
 *
 * @param $definitions
 *
 * @return string
 */

function buildDefinitionList(array $definitions)
{
    $list = '<dl>';
    foreach ($definitions as $singleDefinition) {
        $list = $list . '<dt>' . $singleDefinition[0] . '</dt><dd>' . $singleDefinition[1] . '</dd >';
    }
    $list .= '</dl>';
    return $list;
}
