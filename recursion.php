<?php
$task = [
    [
        'id' => 1,
        'name' => 'Задача 1',
        'parent_id' => null,
    ],
    [
        'id' => 2,
        'name' => 'Задача 2',
        'parent_id' => null,
    ],
    [
        'id' => 3,
        'name' => 'Задача 3',
        'parent_id' => null,
    ],
    [
        'id' => 4,
        'name' => 'Подзадача 1.1',
        'parent_id' => 1,
    ],
    [
        'id' => 5,
        'name' => 'Подзадача 1.2',
        'parent_id' => 1,
    ],
    [
        'id' => 6,
        'name' => 'Подзадача 1.3',
        'parent_id' => 1,
    ],
    [
        'id' => 7,
        'name' => 'Подзадача 2.2',
        'parent_id' => 2,
    ],
    [
        'id' => 8,
        'name' => 'Подзадача 2.3',
        'parent_id' => 2,
    ],
    [
        'id' => 9,
        'name' => 'Подзадача 3.1',
        'parent_id' => 3,
    ],
    [
        'id' => 10,
        'name' => 'Подзадача 1.1.1',
        'parent_id' => 4,
    ],
];
function getTask(array $items, ?int $parent_id = null): void
{
    foreach ($items as $item) {
        if ($item['parent_id'] == $parent_id) {
            echo $item['name'] . '<br>';
            getTask($items, $item['id']);
        }
    }
};

getTask($task);
