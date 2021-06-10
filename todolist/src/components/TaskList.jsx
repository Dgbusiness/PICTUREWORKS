import React, { useContext } from 'react'
import { TaskContext } from '../contexts/TaskContextProvider'
import TaskDetails from './TaskDetails';


export default function TaskList() {
    const { tasks } = useContext(TaskContext);

    return tasks.length ? (
        <div className="task-list">
            <ul>
                {
                    tasks.map(task => {
                        return ( <TaskDetails task={ task } key={ task.id } /> );
                    })
                }
            </ul>
        </div>
    ) : (
        <div className="empty">No tasks to do. Hello free time :)</div>
    )
}
