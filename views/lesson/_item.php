<tr>
    <td>
        <?= $model->id ?>
    </td>
    <td>
        <a>
            <?= $model->title ?>
        </a>
        <br>
        <small>
           <?= (!empty($model->created_at)) ? 'Добавлено:'.date('d.m.Y', strtotime($model->created_at)) : '' ?>
        </small>
    </td>
    <td>
        <?= mb_substr($model->description, 0, 100).'...' ?? '' ?>
    </td>
    <td class="project-state">
        <?php if($model->learned): ?>
            <span class="badge badge-success">Да</span>
        <?php else: ?>
            <span class="badge badge-danger">Нет</span>
        <?php endif; ?>
    </td>
    <td class="project-actions text-right">
        <a class="btn btn-primary btn-sm" href="/lesson/view?id=<?= $model->id ?>">
            <i class="fas fa-eye"></i>
            Подробно
        </a>
    </td>
</tr>
