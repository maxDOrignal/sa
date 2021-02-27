<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- include header --}}
    @include('../inc/head')

<body >
    
{{-- parent div --}}
<div class="container flexColumn">

    <div class="formContainer">

        {{-- {{$message}} --}}
        {{-- input that register the tasks --}}
        <form class="flexRow" method="post">
            @csrf
            <input type="text" name="content" id="taskType">
            <input type="submit" value="+" id="submit">
        </form>

    </div>


    {{-- there is the place will show all tasks  --}}
    <div class="tasks flexColumn">

            @if (count($lists) > 0 )

                @foreach ($lists as $list)

                    <div class="task flexColumn" data-task-id="{{ $list-> id }}">
                        <div class="content">
                            {{ $list -> content }}
                        </div>

                            <div class="buttons flexColumn">
                                <a class="button" href="deleted/{{ $list -> id }}">delete</a>
                                <a class="button" href="done/{{ $list -> id }}">done</a>
                            </div>
                    </div>

                @endforeach

            @endif
            
    </div>

</div>

<div class="showMore">
    show
</div>
@include('../inc/foot')