window.onscroll = () => {
    const target = document.body;
    if(this.scrollY <= 3000) target.className = ''; else target.className = 'scroll';
    if(this.scrollY > 4750) target.className = 'end';

    // console.log(this.scrollY);
};

function hideMenuMobile() {
  document.getElementById("navbarNavDropdown").classList.remove("show");
}