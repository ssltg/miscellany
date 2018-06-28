<div class="row">
    <div class="col-md-3">
        <div class="box">
            <div class="box-body box-profile">
                @include ('cruds._image')

                <h3 class="profile-username text-center">{{ $model->name }}
                    @if ($model->is_private)
                         <i class="fa fa-lock" title="{{ trans('crud.is_private') }}"></i>
                    @endif
                </h3>

                <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>{{ trans('menu_links.fields.entity') }}</b>
                            <span  class="pull-right">
                            <a href="{{ route($model->entity->pluralType() . '.show', $model->entity_id) }}" data-toggle="tooltip" title="{{ $model->entity->tooltip() }}">{{ $model->entity->name }}</a>
                            </span>
                            <br class="clear" />
                        </li>
                </ul>

                @include('.cruds._actions', ['disableMove' => true])
            </div>
        </div>
    </div>
    <div class="col-md-9">
        @include('cruds.boxes.history')
    </div>
</div>