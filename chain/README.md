### 责任链模式

当程序需要按一定的顺序（可配置）处理某个任务时，处理步骤多个，每个步骤单一职责。

几个要素：
- 接口：包含handle方法、setNext方法、getNext方法
- 抽象父类：实现setNext、getNext方法
- 具体handle类：实现handle方法
