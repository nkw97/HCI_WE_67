window.addEventListener('load', () => {

    // Via Query parameters - GET
    /* const params = (new URL(document.location)).searchParams;
    const name = params.get('name');
    const surname = params.get('surname'); */

    // Via local Storage
    /* const name = localStorage.getItem('NAME');
    const surname = localStorage.getItem('SURNAME'); */
    
    const c_diff_country = sessionStorage.getItem('cun');
    const c_diff_fname = sessionStorage.getItem('fname');
    const c_diff_lname = sessionStorage.getItem('lname');
    const c_diff_address = sessionStorage.getItem('address');
    const c_diff_state_country = sessionStorage.getItem('city');
    const c_diff_postal_zip = sessionStorage.getItem('zip');
    const c_diff_email_address = sessionStorage.getItem('email');
    const c_order_notes = sessionStorage.getItem('note');

    document.getElementById('result-cun').innerHTML = c_diff_country;
    document.getElementById('result-fname').innerHTML = c_diff_fname;
    document.getElementById('result-lname').innerHTML = c_diff_lname;
    document.getElementById('result-address').innerHTML = c_diff_address;
    document.getElementById('result-city').innerHTML = c_diff_state_country;
    document.getElementById('result-zip').innerHTML = c_diff_postal_zip;
    document.getElementById('result-email').innerHTML = c_diff_email_address;
    document.getElementById('result-note').innerHTML = c_order_notes;

})