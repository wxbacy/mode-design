### 享元模式

将类的可变部分与不可变部分进行剥离，不可变（稳定）部分作为共享元素（享元）

即将可共享部分拆分出去独立成一个类，在使用时引用该对象。则该对象在内存中只存在一份，被可变部分所属的对象（多个）引用。
这样在运行时不可变的部分不会被改变更稳定也更节省内存