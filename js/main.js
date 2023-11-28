
$(document).ready(function() {
    $(window).scroll(function() {
        $('.animated-element').each(function() {
            var position = $(this).offset().top + 75;
            var scroll = $(window).scrollTop();

            if (position < scroll + $(window).height()) {
				//$(this).addClass('animate__animated');
				$(this).addClass('visible');
            }
        });
        $('.header')
    });
});

$(document).ready(function(){
    $('#submit').click(function(event){
        event.preventDefault();
        let formData2 = document.getElementsByTagName('input');
        let formData3 = document.getElementsByTagName('textarea');
        const checkError = [];
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        for (const inputs of formData2) {
            if (inputs.value == '') {
                inputs.style.border='1px solid red';
                checkError.push('please fill all compulsory fields (coloured red)');
            }
            if (inputs.id =='email') {
                if (!emailPattern.test(inputs.value)) {
                    checkError.push('wrong email type');
                    inputs.style.border='1px solid red';
                }
            }
            if (inputs.id == 'phone') {
                if (inputs.value.length != 11) {
                    checkError.push('wrong phone number');
                    inputs.style.border='1px solid red';
                }
            }
        }
        for (const inputs of formData3) {
            if (inputs.value == '') {
                inputs.style.border='1px solid red';
                checkError.push('please fill all compulsory fields (coloured red)');
            }
        }
        if (checkError.length < 1) {
            for (const inputs of formData2) {
                inputs.style.border='none';
            }
        }else{
            $('#result').html(checkError[0]);
        }
       
    })    
})




$(document).ready(function(){
    document.querySelector("#footer-loader").style.display = "none";
    $('#footer-submit').click(function(event){
        event.preventDefault();
        let formData = $("#footer-form").serialize()
        let footerEmail = document.querySelector("#footer-email");
        let footerResult = document.querySelector("#footer-result");
        document.querySelector("#footer-loader").style.display = "block";
        const checkError = [];
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (footerEmail.value == "" || !emailPattern.test(footerEmail.value)) {
            checkError.push("Wrong email");
        }
        if (checkError.length > 0) {
            footerResult.innerHTML = "<p>" + checkError[0] + "</p>";
            document.querySelector("#footer-loader").style.display = "none";
            footerResult.style.color ="red";
        }else{
            $.ajax({
                url: 'footer-proposal.php',
                method: 'post',
                data : formData + '&action=footer-submit',
            }).done(function(result){
                $('#footer-loader').hide();
                footerResult.innerHTML = result;
                footerResult.style.color= "green"
            })
        }
    })    
})





const header = document.querySelector("header");
const sectionOne = document.querySelector(".main-section");
const blueLogo = document.querySelector("#blue-logo");
const whiteLogo = document.querySelector("#white-logo");
const menu = document.querySelector(".header i");

const sectionOneOptions = {
    rootMargin: "-550px 0px 0px 0px"
};
const sectionOneObserver =  new IntersectionObserver(function(entries, sectionOneObserver)
{
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            header.classList.add("header-scrolled");
            blueLogo.style.display= "block";
            whiteLogo.style.display = "none";
            menu.style.color = 'rgb(18,40,201)';
        }else{
            header.classList.remove("header-scrolled");
            blueLogo.style.display= "none";
            whiteLogo.style.display = "block";
            menu.style.color = '#fff';
        }
    })
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

const footerMail = document.querySelector("#footer-email");
footerMail.addEventListener("click", ()=> function(){
    document.getElementById("footer-loader").innerHTML = "x";
})

// Checking for scroll when scrolling down or up
const nav = document.querySelector(".header");
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () =>{
    if (lastScrollY < window.scrollY) {
        nav.style.display ="none"
    }else{
        nav.style.display ="flex"
    }
    lastScrollY = window.scrollY;
})