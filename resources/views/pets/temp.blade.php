<script>
    function submitForm() {
        let myForm = document.getElementById('myDropForm');
        myForm.submit();
    }
</script>
<x-app-layout>
    <form action="/pets" method="post" id="myDropForm" class="dropzone bg-white">
        @csrf
    </form>

</x-app-layout>
