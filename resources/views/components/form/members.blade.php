<?php
/**
 * We want to pre-load the data from the model, or what has been sent with the form.
 */
$selectedOption = [];

$model = array_get($options, 'model', null);
$source = array_get($options, 'source', null);

// Try to load what was sent with the form first, in case there was a form validation error
$previous = old($fieldId);
if (!empty($previous)) {
    //dd($previous);
}
// If we didn't get anything, and there is a model sent, use that
elseif(!empty($model)) {
    /** @var \App\Models\OrganisationMember $member */
    foreach ($model->members()->has('character')->with('character')->get() as $member) {
        if (\App\Facades\EntityPermission::canView($member->character->entity)) {
            // If this is a copy, we need to add the member's real id. Also no copying of roles in this constellation
            if (!empty($source)) {
                $selectedOption[$member->character_id] = strip_tags($member->character->name);
            } else {
                $selectedOption['m_' . $member->id] = strip_tags($member->character->name) . (!empty($member->role) ? ' (' . strip_tags($member->role) . ')' : null);
            }
        }
    }
}
?>
<label>{{ trans('organisations.fields.members') }}</label>

<select multiple="multiple" name="members[]" id="members" class="form-control form-members" style="width: 100%" data-url="{{ route('characters.find') }}">
    @foreach ($selectedOption as $key => $val)
        <option value="{{ $key }}" selected="selected">{{ $val }}</option>
    @endforeach
</select>
