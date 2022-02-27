function openTimes(evt, timeSlot) {
    let i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName('pick-up-time-tab-content');
    for (i = 0; i < tabcontent.length; i++){
        tabcontent[i].style.display = "none"
    }

    tablinks = document.getElementsByClassName("pick-up-time-tab-link");
    for (i = 0; i < tablinks.length; i++){
        tablinks[i].className = tablinks[i].className.replace(' active','');
    }

    document.getElementById(timeSlot).style.display = 'block';
    evt.currentTarget.className += ' active';
}