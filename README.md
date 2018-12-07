# 解密 qq1790749886/javanet 文件

相关链接：
- [火绒安全实验室 - "微信支付"勒索病毒制造者被锁定 传播、危害和疫情终极解密](https://zhuanlan.zhihu.com/p/51583192)
- [钛媒体 - “微信勒索病毒”全纪实：打扰了，我只是病毒界的杨超越](http://www.tmtpost.com/3632417.html)

## 简介（并不

从文中给出的 Commit ID 进行了 Github 搜索来到了该仓库 ~~[qq1790749886/javanet](https://github.com/qq1790749886/javanet)~~（该仓库已被删除）。
打开一看都是些什么几把，全是 "aa" 的 Commit Message。
打开了几个文件，发现文件“似乎”被加密了。那我练练手（

[javanet.zip](/javanet.zip) 是该仓库位于2018-12-05 14:52时刻的带 .git 的压缩包。

将 test_ed_403.txt 进行 [zDecrypt](./zDecrypt/) 后可以得到两个图片的链接：
- [\[exe\](疑似病毒样本)](http://r.photo.store.qq.com/psb?/V11qYOpE2pevVa/ZVQb4ku57Vu9D*s16F.kIE3F4BN.8oN4wo8i1Njxnvs!/r/dFQBAAAAAAAA)
- [\[dll\](libcef.dll)](http://r.photo.store.qq.com/psb?/V11qYOpE2pevVa/NIGexUTTQqLwqz3yrQ*I6OwKOUh4ntdZHHi8xoQqNbQ!/r/dFIBAAAAAAAA)

后者已经被腾讯删除，但是前者尚未删除，此处留下[存档](/psb.jpg)。  
该图片经检查发现在 jpg 文件结束标志符 `FF D9` 的后面紧跟着的就是 exe 文件开始标志符 `4D 5A`，~~可初步判定是病毒样本~~。(钛媒体指出这只是个下载器（我没沙箱测试（

~~我觉得这个仓库可以送到 [You Had One Job! (为什么你就那么喜欢把github当网盘)](https://github.com/You-Had-One-Job)~~

## zDecrypt

解密这位病毒作者的~~加密~~文件。（同时也可解密该作者在豆瓣上发起攻击所用的指令（

## 许可证

[DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE](/LICENSE)
