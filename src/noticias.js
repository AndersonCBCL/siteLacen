function setupPopup(popupId, openButtonId, closeButtonId) {
    const popup = document.getElementById(popupId);
    const openButton = document.getElementById(openButtonId);
    const closeButton = document.getElementById(closeButtonId);
  
    openButton.addEventListener('click', () => {
      popup.style.display = 'flex';
    });
  
    closeButton.addEventListener('click', () => {
      popup.style.display = 'none';
    });
  
    popup.addEventListener('click', (event) => {
      if (event.target === popup) {
        popup.style.display = 'none';
      }
    });
  }
  
  setupPopup('popup-1', 'openPopup-1', 'closePopup-1');
  setupPopup('popup-2', 'openPopup-2', 'closePopup-2');
  setupPopup('popup-3', 'openPopup-3', 'closePopup-3');
  setupPopup('popup-4', 'openPopup-4', 'closePopup-4');
  setupPopup('popup-5', 'openPopup-5', 'closePopup-5');
  setupPopup('popup-6', 'openPopup-6', 'closePopup-6');
  setupPopup('popup-7', 'openPopup-7', 'closePopup-7');