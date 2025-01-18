import React from "react";
import { ArrowLeft } from "lucide-react";
export function App() {
  return (
    <div className="w-full min-h-screen bg-green-50">
      <div className="max-w-3xl mx-auto min-h-screen flex flex-col p-8 border-2 border-green-600 bg-white shadow-lg">
        <button className="flex items-center gap-2 text-red-700 hover:text-red-800 mb-8 transition-colors duration-200">
          <ArrowLeft size={20} />
          <span>Back</span>
        </button>
        <main className="flex-1">
          <article className="prose prose-slate max-w-none">
            <h1 className="text-3xl font-bold mb-6 text-black">
              The Art of Mindful Living
            </h1>
            <p className="mb-4 text-gray-900">
              In today's fast-paced world, the practice of mindfulness has
              become more relevant than ever. As we navigate through our daily
              lives, constantly bombarded with information and responsibilities,
              taking time to center ourselves has become not just a luxury, but
              a necessity.
            </p>
            <h2 className="text-2xl font-semibold mt-8 mb-4 text-green-700">
              Understanding Mindfulness
            </h2>
            <p className="mb-4 text-gray-900">
              Mindfulness is the practice of being present and fully engaged
              with whatever we're doing at the moment — free from distraction or
              judgment, and aware of our thoughts and feelings without getting
              caught up in them.
            </p>
            <p className="mb-4 text-gray-900">
              This ancient practice has found new applications in modern life,
              from reducing stress in the workplace to improving focus in
              academic settings. Research continues to uncover the numerous
              benefits of mindfulness, including reduced anxiety, better
              emotional regulation, and improved cognitive performance.
            </p>
            <h2 className="text-2xl font-semibold mt-8 mb-4 text-green-700">
              Daily Practices
            </h2>
            <p className="mb-4 text-gray-900">
              Incorporating mindfulness into your daily routine doesn't require
              hours of meditation or major lifestyle changes. Simple practices
              like mindful breathing, conscious eating, or taking short breaks
              to observe your surroundings can make a significant difference.
            </p>
          </article>
        </main>
        <footer className="mt-12 pt-6 border-t border-red-200">
          <p className="text-center text-black text-sm">
            © 2023 Blog Name. All rights reserved.
          </p>
        </footer>
      </div>
    </div>
  );
}
