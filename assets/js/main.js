feather.replace()
AOS.init();

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      includedLanguages: "en,id"
    }, 'google_translate_element');
  }