type MyStack struct {
    nums []int
}


func Constructor() MyStack {
    return MyStack{
        nums: make([]int, 0),
    }
}


func (this *MyStack) Push(x int)  {
    this.nums = append(this.nums, x)
}


func (this *MyStack) Pop() int {
    lastKey := len(this.nums) - 1
    lastVal := this.nums[lastKey]
    this.nums = this.nums[:lastKey]
    return lastVal
}


func (this *MyStack) Top() int {
    return this.nums[len(this.nums) - 1]
}


func (this *MyStack) Empty() bool {
    return len(this.nums) == 0
}


/**
 * Your MyStack object will be instantiated and called as such:
 * obj := Constructor();
 * obj.Push(x);
 * param_2 := obj.Pop();
 * param_3 := obj.Top();
 * param_4 := obj.Empty();
 */