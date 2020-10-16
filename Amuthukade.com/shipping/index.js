function handleSubmit () {
    const c_diff_country = document.getElementById('c_diff_country').value;
    const c_diff_fname = document.getElementById('c_diff_fname').value;
    const c_diff_lname = document.getElementById('c_diff_lname').value;
    const c_diff_address = document.getElementById('c_diff_address').value;
    const c_diff_state_country = document.getElementById('c_diff_state_country').value;
    const c_diff_postal_zip = document.getElementById('c_diff_postal_zip').value;
    const c_diff_email_address = document.getElementById('c_diff_email_address').value;
    const c_order_notes = document.getElementById('c_order_notes').value;

    // to set into local storage
    /* localStorage.setItem("NAME", name);
    localStorage.setItem("SURNAME", surname); */
    
    sessionStorage.setItem("cun", c_diff_country);
    sessionStorage.setItem("fname", c_diff_fname);
    sessionStorage.setItem("lname", c_diff_lname);
    sessionStorage.setItem("address", c_diff_address);
    sessionStorage.setItem("city", c_diff_state_country);
    sessionStorage.setItem("zip", c_diff_postal_zip);
    sessionStorage.setItem("email", c_diff_email_address);
    sessionStorage.setItem("note", c_order_notes);

    return;
}