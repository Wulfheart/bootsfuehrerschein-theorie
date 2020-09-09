<div x-data="{selected: 0}">
   <h2>{{ $task->question }}</h2>
   @foreach ($task->responses->shuffle() as $item)
   <div x-on:click="select = {{ $item->id }}" x-bind:class="{selected == {{ $item->id }} ? 'text-red' : ''}">
       
           {{ $item->text }}
   </div>
   @endforeach
   {{ $selected }}
</div>
