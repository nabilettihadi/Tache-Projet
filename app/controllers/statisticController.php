<?php
class StatisticController extends Controller
{
    public function index($error = "")
    {
        if (isUserLogged()) {
            $status = "";
            $this->view("stastic", "", [
                "error" => $error,
                "statistic" => $this->getStatistics(),
                "numberOfTask" => $this->numberOfTask(),
                "taskDone" => $this->task_Done(),
                "taskth" => $this->task_Doneth(),
                "taskinc" => $this->taskIN()
            ]);

            $this->view->render();
        } else {
            redirect('user/log_in');
        }
    }

    public function getStatistics()
    {
        $this->model("task");
        $taskTodo = $this->model->statistictask("to do");
        $taskInprogress = $this->model->statistictask("in progress");
        $taskDoing = $this->model->statistictask("doing");

        return [
            "to do" => $taskTodo,
            "in progress" => $taskInprogress,
            "doing" => $taskDoing
        ];
    }

    public function numberOfTask()
    {
        $this->model("task");
        return $this->model->taskProject() ?: 0;
    }

    public function task_Done()
    {
        $this->model("task");
        return $this->model->taskDone() ?: 0;
    }

    public function task_Doneth()
    {
        $this->model("task");
        return $this->model->taskProjectth() ?: 0;
    }

    public function taskIN()
    {
        $this->model("task");
        return $this->model->task() ?: 0;
    }
}
