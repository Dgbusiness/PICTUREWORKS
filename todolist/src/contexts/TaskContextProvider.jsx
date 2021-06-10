import React, { createContext, useReducer, useEffect } from 'react';
import { TaskReducer } from '../reducers/TaskReducer';

export const TaskContext = createContext();

export default function TaskContextProvider(props) {

    const [tasks, dispatch] = useReducer(TaskReducer, [], () => {
        const localData = localStorage.getItem('tasks');
        return localData ? JSON.parse(localData) : [];
    });
    useEffect(() => {
        localStorage.setItem('tasks', JSON.stringify(tasks))
    }, [tasks])
    return (
        <TaskContext.Provider value={{ tasks, dispatch }}>
            { props.children }
        </TaskContext.Provider>
    )
}
