window.onscroll = () => {
    const target = document.body;
    if(this.scrollY <= 1700) target.className = ''; else target.className = 'scroll';
    if(this.scrollY > 4750) target.className = 'end';

    console.log(this.scrollY);
};