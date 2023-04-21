window.Swal = Swal;

function deleteImage(event) {
  event.preventDefault();
  Swal.fire({
    title: 'Are you sure?',
    text: 'Do you want to delete this image?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete',
    cancelButtonText: 'Cancel'
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById(`deleteImageForm${event.target.dataset.id}`).submit();
    }
    return result;
  }).then((result) => {
    if (result.value) {
      Swal.fire({
        title: 'Success!',
        text: 'Image deleted successfully',
        icon: 'success'
      });
    }
  });
}
