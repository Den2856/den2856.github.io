window.addEventListener('scroll', function() {
    const podPic = document.querySelector('.parallax-pic')
    const ourDiv = document.querySelector('.our-info')
    

    let scrollPosition = window.pageYOffset;

    podPic.style.transform = 'translateY('+ -scrollPosition * 0.1 + 'px)';
    ourDiv.style.transform = 'translateY('+ -scrollPosition * 0.05 + 'px)';
      
});


document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
  
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
  
      question.addEventListener('click', (e) => {
        e.preventDefault();
  
        // Закрываем все открытые элементы, кроме текущего
        faqItems.forEach(otherItem => {
          const otherAnswer = otherItem.querySelector('.faq-answer');
          const otherQuestion = otherItem.querySelector('.faq-question');
          if (otherItem !== item) {
            otherAnswer.style.height = '0';
            otherAnswer.style.paddingTop = '0';
            otherAnswer.style.paddingBottom = '0';
            otherQuestion.classList.remove('active');
          }
        });
  
        // Переключаем текущий элемент
        if (answer.style.height && answer.style.height !== '0px') {
          answer.style.height = '0';
          answer.style.paddingTop = '0';
          answer.style.paddingBottom = '0';
          question.classList.remove('active');
        } else {
          const contentHeight = answer.scrollHeight + 10;
          answer.style.height = `${contentHeight}px`;
          answer.style.paddingTop = '8px';
          answer.style.paddingBottom = '16px';
          question.classList.add('active');
        }
      });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const marqueeText = document.querySelector(".marquee-text");
    const text = marqueeText.textContent;
  
    // Дублируем текст для бесшовного эффекта
    marqueeText.innerHTML += text;
  });
  