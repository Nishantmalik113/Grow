//FAQ Accordian
document.addEventListener('DOMContentLoaded', function(){
    const faqContainer = document.querySelector('.faq-content');

    faqContainer.addEventListener('click', function(e){
        const groupheader=e.target.closest('.faq-group-header');
        
        if(!groupheader) return;

        const group= groupheader.parentElement;
        const groupbody = group.querySelector('.faq-group-body');
        const icon = group.querySelector('i');

        icon.classList.toggle('fa-minus');
        icon.classList.toggle('fa-plus');

        groupbody.classList.toggle('open');

        const othergroups=faqContainer.querySelectorAll('.faq-group');

        othergroups.forEach((othergroup)=> {
            if(othergroup!=group){

                const othergroupbody=othergroup.querySelector('.faq-group-body');
                const otherIcon=othergroup.querySelector('.faq-group-header i');

                othergroupbody.classList.remove('open');
                otherIcon.classList.remove('fa-minus');
                otherIcon.classList.add('fa-plus');
            }
        })

    })
})