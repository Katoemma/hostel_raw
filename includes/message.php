<?php if(isset($_SESSION['message'])): ?>
    <div class="fixed top-12 left-0 right-0 z-50 flex flex-col items-center" id="toast-danger">
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-white bg-green-600 rounded-lg shadow" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg class="w-5 h-5 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
            </div>
            <div class="ml-3 text-sm font-normal"><?php echo $_SESSION['message'];?></div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-green-600 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <?php unset($_SESSION['message']);?>
        </div>
    </div>
<?php endif; ?>

<script>
    setTimeout(function(){
        document.getElementById('toast-success').style.opacity = '0';
        setTimeout(function(){
        document.getElementById('success-alert').style.display = 'none';
        }, 5000);
    }, 5000);
</script>
