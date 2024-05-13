@push('scripts')

<link href="{{asset('backend/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('backend/assets/libs/select2/select2.min.js')}}"></script>

<script>
Livewire.on('refresh_print', postId => {
    $(document).ready(function() {
        printDiv();
        function printDiv() {
            var css = '@page { size: a4; }',
                head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');
            style.type = 'text/css';
            style.media = 'print';
            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
            head.appendChild(style);
            var printContents = $(".right_content").html();
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        location.reload();
    });
});

Livewire.on('refresh_print_land', postId => {
    $(document).ready(function() {
        printDiv();
        function printDiv() {
            var css = '@page { size: a4 landscape; }',
                head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');
            style.type = 'text/css';
            style.media = 'print';
            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
            head.appendChild(style);
            var printContents = $(".right_content").html();
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        location.reload();
    });
});

$(document).ready(function() {
    $('#branch_id').select2();
    $('#branch_id').on('change', function(e) {
        var data = $('#branch_id').select2("val");
        @this.set('branch_id', data);
    });
});
</script>
@endpush