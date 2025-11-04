<?php $attributes = arnoson\KirbyForms\formFieldAttributes(
  $id,
  $block,
  $form
); ?>

<?php

$counties = [
    'Antrim',
    'Armagh',
    'Carlow',
    'Cavan',
    'Clare',
    'Cork',
    'Derry',
    'Donegal',
    'Down',
    'Dublin',
    'Fermanagh',
    'Galway',
    'Kerry',
    'Kildare',
    'Kilkenny',
    'Laois',
    'Leitrim',
    'Limerick',
    'Longford',
    'Louth',
    'Mayo',
    'Meath',
    'Monaghan',
    'Offaly',
    'Roscommon',
    'Sligo',
    'Tipperary',
    'Tyrone',
    'Waterford',
    'Westmeath',
    'Wexford',
    'Wicklow'
];

?>

<?php snippet('form-label', [
  'id' => $id,
  'label' => $label,
  'required' => $block->required()->toBool(),
]); ?>
<select <?= attr($attributes) ?>>
  <?php if ($block->empty()->toBool() || $block->default()->isEmpty()): ?>
  <option value=""><?= $block->placeholder()->isEmpty()
    ? ' — '
    : $block->placeholder() ?></option>
  <?php endif; ?>
  <?php foreach ($counties as $county): ?>
  <option <?= attr([
    'value' => $county,
    'selected' => $county == $block->default()->value(),
  ]) ?>><?= $county ?></option>
  <?php endforeach; ?>
</select>