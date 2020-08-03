function CKclear() {
  for (instance in CKEDITOR.instance) {
    CKEDITOR.instances[instance].updateElement();
    CKEDITOR.instances[instance].setData("");
  }
}

function CKupdate() {
  for (instance in CKEDITOR.instance) {
    CKEDITOR.instances["profileDesc"].updateElement();
  }
}
