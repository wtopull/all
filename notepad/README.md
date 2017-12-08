## 安装步骤
本项目是使用vue-cli脚手架生成的项目，项目代码可以到我的github上clone下来。clone下来之后可进入文件目录

	git clone https://github.com/lin-xin/notepad.git
	cd notepad
	npm install
	npm run dev

## 主要难点

### 1.折叠面板

难点：点击折叠面板title,要动画实现sliderUp和sliderDown，但是div高度auto，使用transition： height .3s无效。

解决方法：点击时候获取div高度值，赋值给style.height，然后再改变高度为0，这样transition才会生效。

### 2.本地存储

知识点：localStorage是HTML5提供的一种在客户端存储数据的新方法，没有时间限制，第二天、第二周或下一年之后，数据依然可用。

用法：

	1）存储数据：localStorage.setItem(item, value)
	2）获取数据：localStorage.getItem(item)
	3）移除数据：localStorage.removeItem(item)
