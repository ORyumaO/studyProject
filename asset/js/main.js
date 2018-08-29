const APP = {
  // サイドバーの表示・非表示のJS
  getSwitchClass: document.getElementById('sideBarSwitch'),

  openSideBar: function () {
    var target = document.getElementsByClassName('sideBar')
    var addStyle = target[0].style
    target[0].classList.add('active')
    addStyle.display = 'block'
  },

  closeSideBar: function () {
    var target = document.getElementsByClassName('sideBar')
    var addStyle = target[0].style
    target[0].classList.remove('active')
    addStyle.display = 'none'
  },
}
switchSideBar =  function () {
  var checkContains = document.getElementsByClassName('sideBar')[0].classList.contains('active')
  if (checkContains) {
    APP.closeSideBar()
    } else {
    APP.openSideBar()
  }
}
APP.getSwitchClass.addEventListener('click', switchSideBar);
