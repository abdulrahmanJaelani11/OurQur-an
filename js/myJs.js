function showSidebar() {
    $("#accordionSidebar").fadeToggle(200)
}

$(document).ready(function(){
    $('.logout').click(function(e) {
        e.preventDefault()

        Swal.fire({
            icon : 'question',
            title: 'Logout?',
            text : "Apakah kamu yakin untuk logout?",
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yakin',
            denyButtonText: `Don't save`,
            cancelButtonText: 'kembali',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                document.location = 'proses/prosesLogout.php'
                // Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    })

    
})
