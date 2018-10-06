const APP = {
  // 定数管理プロパティ
  state: {

  },

  // サイドバーを出す関数
  openSideBar: function () {
    let self = APP,
      target = document.getElementsByClassName('sideBar'),
      addStyle = target[0].style
    target[0].classList.add('active')
    addStyle.display = 'block'
  },

  // サイドバーをしまう関数
  closeSideBar: function () {
    let self = APP,
      target = document.getElementsByClassName('sideBar'),
      addStyle = target[0].style
    target[0].classList.remove('active')
    addStyle.display = 'none'
  },

  // サイドバーの状態によってイベントをハンドルする関数
  switchSideBar: function (e) {
    let self = APP,
      checkContains = document.getElementsByClassName('sideBar')[0].classList.contains('active')
    if (checkContains) {
      self.closeSideBar()
    } else {
      self.openSideBar()
    }
  },

  /**
   * domCreater
   * DOM作成するやつ
   * @param {string} domName
   * @param {JSON} attributes
   */
  domCreater: function (domName, attributes) {
    let i = 0,
      dom = null,
      attributeKeys = Object.keys(attributes),
      attributeValues = Object.values(attributes)

    dom = document.createElement(domName)
    
    for (; i < attributeKeys.length; i++) {
      if (attributeKeys[i] === 'text') {
        text = document.createTextNode(attributeValues[i])
        dom.appendChild(text)
      } else {
        dom.setAttribute(attributeKeys[i], attributeValues[i])
      }
    }
    return dom
  },

  // 巻数のインプットを表示するやつ
  volumeFieldDisplay: function () {
    let self = APP,
      checkValiation = document.getElementsByName('valiation'),
      volumeField = document.getElementsByClassName('volume_field'),
      inputVolume = self.domCreater('input', {
        'type': 'number',
        'class': 'volume',
        'name': 'volume',
        'id': 'volume'
      }),
      labelVolume = self.domCreater('label', {
        'for': 'volume',
        'text': '巻数：'
      })

    if (checkValiation[2].checked === true) {
      volumeField[0].appendChild(labelVolume)
      volumeField[0].appendChild(inputVolume)
    }
  }
  
}
document.getElementsByName('valiation')[2].addEventListener('change', APP.volumeFieldDisplay)
document.getElementById('sideBarSwitch').addEventListener('click', APP.switchSideBar)
