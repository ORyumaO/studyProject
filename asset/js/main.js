const APP = {
  // 定数管理プロパティ
  state: {

  },

  // サイドバーを出す関数
  openSideBar: function () {
    var self = APP,
      target = document.getElementsByClassName('sideBar'),
      addStyle = target[0].style
    target[0].classList.add('active')
    addStyle.display = 'block'
  },

  // サイドバーをしまう関数
  closeSideBar: function () {
    var self = APP,
      target = document.getElementsByClassName('sideBar'),
      addStyle = target[0].style
    target[0].classList.remove('active')
    addStyle.display = 'none'
  },

  // サイドバーの状態によってイベントをハンドルする関数
  switchSideBar: function (e) {
    var self = APP,
      checkContains = document.getElementsByClassName('sideBar')[0].classList.contains('active')
    if (checkContains) {
      self.closeSideBar()
    } else {
      self.openSideBar()
    }
  },

  // DOM作成するやつ
  volumeFieldDisplay: function () {
    var self = APP,
      checkValiation = document.getElementsByName('valiation'),
      volumeField = document.getElementsByClassName('volume_field');

    if (checkValiation.value === 'game') {
      volumeField[0].style.display = 'block'
    } else {
      volumeField[0].style.display = 'none'
    }
  }
}
document.getElementById('sideBarSwitch').addEventListener('click', APP.switchSideBar);
document.getElementById('game').addEventListener('change', APP.volumeFieldDisplay)
