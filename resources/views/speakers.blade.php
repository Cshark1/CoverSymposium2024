<x-layout>
    <script>
        function show(id) {
            document.getElementById("description-" + id).setAttribute("visible", true);
            document.getElementById("bgBlur-" + id).setAttribute("visible", true);
        }

        function hide(id) {
            document.getElementById("description-" + id).removeAttribute("visible");
            document.getElementById("bgBlur-" + id).removeAttribute("visible");
        }
    </script>
    <div class="container mx-auto flex items-center justify-center">
        <h1 class="h1-header">Speakers</h1>
    </div>
    <div class="separator"></div>
    <div class="container mx-auto flex flex-col gap-4 pt-10">
        @foreach ($speakers as $speaker)
            <x-speaker
                :speaker="$speaker"
                :reversed="$loop->even"
            ></x-speaker>
        @endforeach
    </div>
</x-layout>
